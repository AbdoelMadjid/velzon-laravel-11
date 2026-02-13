/*
Template Name: Velzon - Admin & Dashboard Template
File: Icons Search, Filter, Size and Copy Snippet Helper
*/

(function () {
    "use strict";

    var page = window.location.pathname.toLowerCase();
    var library = detectLibrary(page);
    var root = resolveRoot(library);
    if (!root || !library) {
        return;
    }
    var candidates = Array.prototype.slice.call(root.querySelectorAll(".col-xl-3.col-lg-4.col-sm-6"));
    var iconItems = candidates.filter(function (item) {
        return !!item.querySelector("i");
    });

    if (!iconItems.length) {
        return;
    }

    injectStyles();

    var controls = buildControls();
    root.insertBefore(controls.container, root.firstChild);

    var searchInput = controls.searchInput;
    var colorInput = controls.colorInput;
    var sizeSelect = controls.sizeSelect;
    var copyResultInput = controls.copyResultInput;
    var copySnippetBtn = controls.copySnippetBtn;
    var countBadge = controls.countBadge;
    var currentIconClass = "";
    var selectedIconButton = null;

    iconItems = iconItems.filter(function (item) {
        var iconEl = item.querySelector("i");
        var className = normalizeClassName(iconEl.getAttribute("class") || "");
        var iconClass = detectIconClass(className, library);

        if (!iconClass) {
            return false;
        }

        item.dataset.iconClass = iconClass;
        item.dataset.iconName = iconClass.toLowerCase();
        item.dataset.iconText = (item.textContent || "").trim().replace(/\s+/g, " ").toLowerCase();

        if (!item.dataset.iconEnhanced) {
            enhanceItem(item);
            item.dataset.iconEnhanced = "1";
        }

        return true;
    });

    root.addEventListener("click", function (event) {
        var btn = event.target.closest(".icon-copy-btn");
        if (!btn) {
            return;
        }

        var parentItem = btn.closest(".icon-tool-item");
        if (parentItem && parentItem.dataset.iconClass) {
            currentIconClass = parentItem.dataset.iconClass;
        }
        setSelectedIconBadge(btn);
        updateCopyResultSnippet(sizeSelect.value || "24", colorInput.value || "#000000");
        scrollToTop();
    });

    searchInput.addEventListener("input", applyFilters);
    colorInput.addEventListener("input", applyFilters);
    sizeSelect.addEventListener("change", applyFilters);
    copySnippetBtn.addEventListener("click", function () {
        var snippet = (copyResultInput.value || "").trim();
        if (!snippet) {
            return;
        }
        copyToClipboard(snippet, function () {
            var original = copySnippetBtn.innerHTML;
            copySnippetBtn.innerHTML = "Copied";
            setTimeout(function () {
                copySnippetBtn.innerHTML = original;
            }, 1200);
        });
    });

    applyFilters();

    function applyFilters() {
        var q = (searchInput.value || "").trim().toLowerCase();
        var color = colorInput.value || "#000000";
        var size = sizeSelect.value || "24";
        var visibleCount = 0;

        iconItems.forEach(function (item) {
            var name = item.dataset.iconName || "";
            var text = item.dataset.iconText || "";

            var matchQuery = q === "" || name.indexOf(q) !== -1 || text.indexOf(q) !== -1;
            var visible = matchQuery;

            item.style.display = visible ? "" : "none";

            if (visible) {
                visibleCount++;
            }

            var iconEl = item.querySelector("i");
            if (iconEl) {
                iconEl.style.fontSize = size + "px";
                iconEl.style.color = color;
            }

        });

        countBadge.textContent = visibleCount + " ikon";
        updateCopyResultSnippet(size, color);
        toggleGroupVisibility();
    }

    function updateCopyResultSnippet(size, color) {
        if (!currentIconClass) {
            copyResultInput.value = "";
            copySnippetBtn.disabled = true;
            return;
        }
        copyResultInput.value = buildSnippet(currentIconClass, size, color);
        copySnippetBtn.disabled = false;
    }

    function setSelectedIconBadge(btn) {
        if (selectedIconButton && selectedIconButton !== btn) {
            selectedIconButton.innerHTML = "Pilih";
            selectedIconButton.classList.remove("btn-success");
            selectedIconButton.classList.add("btn-soft-secondary");
        }
        btn.innerHTML = "Copied";
        btn.classList.remove("btn-soft-secondary");
        btn.classList.add("btn-success");
        selectedIconButton = btn;
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    function detectLibrary(pathname) {
        if (pathname.indexOf("icons-remix") !== -1) {
            return "remix";
        }
        if (pathname.indexOf("icons-materialdesign") !== -1) {
            return "materialdesign";
        }
        if (pathname.indexOf("icons-boxicons") !== -1) {
            return "boxicons";
        }
        if (pathname.indexOf("icons-lineawesome") !== -1) {
            return "lineawesome";
        }
        return "";
    }

    function resolveRoot(type) {
        if (type === "remix") {
            return document.getElementById("icons");
        }
        if (type === "materialdesign") {
            return document.querySelector(".row.icon-demo-content");
        }
        if (type === "lineawesome") {
            return document.querySelector(".row.icon-demo-content");
        }
        if (type === "boxicons") {
            return document.getElementById("boxicons-root") || document.querySelector(".row");
        }
        return null;
    }

    function toggleGroupVisibility() {
        var rows = Array.prototype.slice.call(root.querySelectorAll(".row"));

        rows.forEach(function (row) {
            var rowItems = Array.prototype.slice.call(row.querySelectorAll(".icon-tool-item"));
            if (!rowItems.length) {
                return;
            }

            var hasVisible = rowItems.some(function (item) {
                return item.style.display !== "none";
            });

            row.style.display = hasVisible ? "" : "none";

            var prev = row.previousElementSibling;
            if (prev && /^H[1-6]$/.test(prev.tagName)) {
                prev.style.display = hasVisible ? "" : "none";
            }
        });
    }

    function enhanceItem(item) {
        item.classList.add("icon-tool-item");

        var wrapper = document.createElement("div");
        wrapper.className = "icon-item-preview d-inline-flex align-items-center gap-2";

        while (item.firstChild) {
            wrapper.appendChild(item.firstChild);
        }

        var button = document.createElement("button");
        button.type = "button";
        button.className = "btn btn-sm btn-soft-secondary icon-copy-btn";
        button.innerHTML = "Pilih";

        item.appendChild(wrapper);
        item.appendChild(button);
    }

    function buildSnippet(iconClass, size, color) {
        return '<i class="' + iconClass + '" style="font-size: ' + size + 'px; color: ' + color + ';"></i>';
    }

    function detectIconClass(className, type) {
        var tokens = className.split(/\s+/).filter(Boolean);

        if (!tokens.length) {
            return "";
        }

        if (type === "remix") {
            for (var i = 0; i < tokens.length; i++) {
                if (/^ri-/.test(tokens[i])) {
                    return tokens[i];
                }
            }
            return "";
        }

        if (type === "boxicons") {
            var boxStyle = "bx";
            var boxName = "";

            tokens.forEach(function (token) {
                if (/^(bx|bxs|bxl)$/.test(token)) {
                    boxStyle = token;
                }
                if (/^(bx|bxs|bxl)-/.test(token)) {
                    boxName = token;
                }
            });

            return boxName ? boxStyle + " " + boxName : "";
        }

        if (type === "materialdesign") {
            var mdiBase = "";

            tokens.forEach(function (token) {
                if (!/^mdi-/.test(token)) {
                    return;
                }

                if (/^mdi-(\d+px|rotate-\d+|spin)$/.test(token)) {
                    return;
                }

                mdiBase = token;
            });

            return mdiBase ? "mdi " + mdiBase : "";
        }

        if (type === "lineawesome") {
            var laStyle = "las";
            var laName = "";

            tokens.forEach(function (token) {
                if (/^(las|lar|lab)$/.test(token)) {
                    laStyle = token;
                }

                if (/^la-/.test(token)) {
                    laName = token;
                }
            });

            return laName ? laStyle + " " + laName : "";
        }

        return className;
    }

    function buildControls() {
        var wrapper = document.createElement("div");
        wrapper.className = "card icon-tools-card";

        var body = document.createElement("div");
        body.className = "card-body";

        var row = document.createElement("div");
        row.className = "row g-2 align-items-stretch";

        var searchCol = document.createElement("div");
        searchCol.className = "col-lg-7 col-md-12";
        var searchInput = document.createElement("input");
        searchInput.type = "search";
        searchInput.className = "form-control";
        searchInput.placeholder = "Cari ikon...";
        searchCol.appendChild(searchInput);

        var colorCol = document.createElement("div");
        colorCol.className = "col-lg-2 col-md-4";
        var colorInput = document.createElement("input");
        colorInput.type = "color";
        colorInput.className = "form-control form-control-color w-100";
        colorInput.value = "#000000";
        colorInput.title = "Pilih warna ikon";
        colorCol.appendChild(colorInput);

        var sizeCol = document.createElement("div");
        sizeCol.className = "col-lg-2 col-md-4";
        var sizeSelect = document.createElement("select");
        sizeSelect.className = "form-select";
        ["16", "20", "24", "28", "32", "40", "48"].forEach(function (size) {
            var option = document.createElement("option");
            option.value = size;
            option.textContent = size + "px";
            if (size === "24") {
                option.selected = true;
            }
            sizeSelect.appendChild(option);
        });
        sizeCol.appendChild(sizeSelect);

        var countCol = document.createElement("div");
        countCol.className = "col-lg-1 col-md-4 icon-count-wrap";
        var countBadge = document.createElement("span");
        countBadge.className = "badge bg-secondary-subtle text-secondary";
        countBadge.textContent = "0 ikon";
        countCol.appendChild(countBadge);

        row.appendChild(searchCol);
        row.appendChild(colorCol);
        row.appendChild(sizeCol);
        row.appendChild(countCol);

        var resultRow = document.createElement("div");
        resultRow.className = "row g-2 mt-2 align-items-stretch";

        var copyResultCol = document.createElement("div");
        copyResultCol.className = "col-lg-10";
        var copyResultInput = document.createElement("input");
        copyResultInput.type = "text";
        copyResultInput.className = "form-control";
        copyResultInput.placeholder = "Hasil copy snippet";
        copyResultInput.readOnly = true;
        copyResultCol.appendChild(copyResultInput);

        var copyBtnCol = document.createElement("div");
        copyBtnCol.className = "col-lg-2";
        var copySnippetBtn = document.createElement("button");
        copySnippetBtn.type = "button";
        copySnippetBtn.className = "btn btn-primary w-100";
        copySnippetBtn.innerHTML = "Copy";
        copySnippetBtn.disabled = true;
        copyBtnCol.appendChild(copySnippetBtn);

        resultRow.appendChild(copyResultCol);
        resultRow.appendChild(copyBtnCol);

        body.appendChild(row);
        body.appendChild(resultRow);
        wrapper.appendChild(body);

        return {
            container: wrapper,
            searchInput: searchInput,
            colorInput: colorInput,
            sizeSelect: sizeSelect,
            copyResultInput: copyResultInput,
            copySnippetBtn: copySnippetBtn,
            countBadge: countBadge
        };
    }

    function normalizeClassName(value) {
        return value.replace(/\s+/g, " ").trim();
    }

    function injectStyles() {
        if (document.getElementById("icons-tools-style")) {
            return;
        }

        var style = document.createElement("style");
        style.id = "icons-tools-style";
        style.textContent = ""
            + ".icon-tools-card .form-control,.icon-tools-card .form-select,.icon-tools-card .form-control-color,.icon-tools-card .btn{min-height:42px;}"
            + ".icon-tools-card .form-control-color{padding:.375rem .5rem;}"
            + ".icon-tools-card .icon-count-wrap{display:flex;align-items:center;justify-content:flex-end;}"
            + ".icon-tool-item{display:flex;align-items:center;justify-content:space-between;gap:.5rem;}"
            + ".icon-item-preview i{line-height:1;}"
            + ".icon-copy-btn{white-space:nowrap;}"
            + "@media (max-width: 991px){.icon-tools-card .icon-count-wrap{justify-content:flex-start;}}"
            + "@media (max-width: 767px){.icon-tool-item{flex-direction:column;align-items:flex-start;}}";
        document.head.appendChild(style);
    }

    function copyToClipboard(text, done) {
        if (!text) {
            return;
        }

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(done);
            return;
        }

        var textarea = document.createElement("textarea");
        textarea.value = text;
        textarea.setAttribute("readonly", "");
        textarea.style.position = "absolute";
        textarea.style.left = "-9999px";
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        done();
    }
})();

