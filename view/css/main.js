function click0() {
    var gioitinh = document.getElementById("gioitinh");

    // Lấy giá trị thực của thuộc tính display
    var computedStyle = window.getComputedStyle(gioitinh);

    // Kiểm tra trạng thái của menu và thay đổi nó
    if (computedStyle.display === "none" || computedStyle.display === "") {
        gioitinh.style.display = "block";
    } else {
        gioitinh.style.display = "none";
    }
}

function click1() {
    var kid = document.getElementById("kid");

    // Lấy giá trị thực của thuộc tính display
    var computedStyle = window.getComputedStyle(kid);

    // Kiểm tra trạng thái của menu và thay đổi nó
    if (computedStyle.display === "none" || computedStyle.display === "") {
        kid.style.display = "block";
    } else {
        kid.style.display = "none";
    }
}

function click2() {
    var price = document.getElementById("price");

    // Lấy giá trị thực của thuộc tính display
    var computedStyle = window.getComputedStyle(price);

    // Kiểm tra trạng thái của menu và thay đổi nó
    if (computedStyle.display === "none" || computedStyle.display === "") {
        price.style.display = "block";
    } else {
        price.style.display = "none";
    }
}
function click3() {
    var sale = document.getElementById("sale");

    // Lấy giá trị thực của thuộc tính display
    var computedStyle = window.getComputedStyle(sale);

    // Kiểm tra trạng thái của menu và thay đổi nó
    if (computedStyle.display === "none" || computedStyle.display === "") {
        sale.style.display = "block";
    } else {
        sale.style.display = "none";
    }
}
function click4() {
    var color = document.getElementById("color");

    // Lấy giá trị thực của thuộc tính display
    var computedStyle = window.getComputedStyle(color);

    // Kiểm tra trạng thái của menu và thay đổi nó
    if (computedStyle.display === "none" || computedStyle.display === "") {
        color.style.display = "block";
    } else {
        color.style.display = "none";
    }
}
function stopPropagation(event) {
    // Ngăn chặn lan truyền của sự kiện click xuống các phần tử con
    event.stopPropagation();
}