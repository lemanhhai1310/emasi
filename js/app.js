console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

document.addEventListener('uikit:init', () => {
    // do something
    console.log("uikit:init")
})

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const kanns_navbar = x('.kanns-navbar');
        const app = x('#app');
        if (kanns_navbar){
            const kanns_navbarHeight = kanns_navbar ? kanns_navbar.offsetHeight + 'px' : 0;
            app.style.paddingBottom = kanns_navbarHeight;
            console.log('paddingBottom App',kanns_navbarHeight);
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})