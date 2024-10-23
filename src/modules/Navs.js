class Navs {
    constructor() {
        this.findNavs();
    }

    findNavs() {
        const navs = document.querySelectorAll('.nav-wrapper')
        const container = document.querySelector('.container')
        const rect = container.getBoundingClientRect();
        

        navs.forEach(nav => {
            this.adjustNavStart(nav, rect);

            const tabs = nav.querySelectorAll('.tab');

            tabs.forEach(tab => {
                tab.addEventListener('click', (e) => {
                    this.adjustTabs(tab, nav, tabs[0])
                })
            })

        })
    }
    adjustNavStart(nav, rect) {
        nav.style.marginLeft = rect.left + 'px';
    }
    adjustTabs(tab, nav, zero) {
        const content = nav.querySelector('.nav-list');   
        const rect = tab.getBoundingClientRect()
        const diff = window.innerWidth - rect.right - 140;
        let padding = +content.style.left.replace('px', '');
       

        if (diff < 0) {
            content.style.left = padding + diff + 'px'  
        } else {

            const leftTab = zero.getBoundingClientRect()
            const moveRIght = leftTab.left + diff;

            if (moveRIght < 0) {
                content.style.left = leftTab.left + diff + 'px'  
            } else {
                content.style.left = '0';
            }
            
         
        }

    }

}

export default Navs