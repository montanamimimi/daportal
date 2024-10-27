class Burger {
    constructor() {
        this.addListeners();
    }

    addListeners() {
        const on = document.getElementById('burgerOn');
        const off = document.getElementById('burgerOff');

        if (on) {

            const list = document.querySelector('.burder-list')

            on.addEventListener('click', () => {
                list.style.display = 'block'
            })

            off.addEventListener('click', () => {
                list.style.display = 'none'
            })
        }
    }
}

export default Burger