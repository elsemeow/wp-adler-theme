function hideAside() {
    UIkit.offcanvas("#aside").hide();
}

function currentYear() {
    document.getElementById(
        "current-year"
    ).innerHTML = new Date().getFullYear();
}

function zigzagResponsive() {
    if (!window.matchMedia("(max-width:639px)").matches) {
        var divs = document.querySelectorAll(".history-item"),
            even = [],
            odd = [];
        [].forEach.call(divs, function (item, index) {
            index % 2 == 0 ? even.push(item) : odd.push(item);
        }),
        [].forEach.call(even, function (item, index) {
            index % 2 == 0
                ? setOrder(item, odd[index], index)
                : setOrder(odd[index], item, index);
        });
    }

    function setOrder(even, odd, index) {
        (even.style.order = index + 1), (odd.style.order = index);
    }
}

function loader() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("main").classList.add("uk-animation-fade");
}
