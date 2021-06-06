const dateElement = document.getElementById("date");

const showTime = () => {
    let options = { weekday: "long", month: "short", day: "numeric" };
    let today = new Date();
    dateElement.innerHTML = today.toLocaleDateString("en-US", options);
}
showTime();