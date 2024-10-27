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

        if (nav.dataset.direction == '1') {
            nav.style.right = rect.left + 'px';
        } else {
            nav.style.left = rect.left + 'px';
        }

    }
    adjustTabs(tab, nav, zero) {
        const content = nav.querySelector('.nav-list');   
        const rect = tab.getBoundingClientRect()

       
        if (nav.dataset.direction == '1') {
            const diff = rect.left - 140;
            let padding = +content.style.right.replace('px', '');

            if (diff < 0) {
                content.style.right = padding + diff + 'px'  
            } else {
                const moveRIght = padding + diff;
    
                if (moveRIght < 0) {
                    content.style.right = moveRIght + 'px'  
                } else {
                    content.style.right = '0';
                }
                
             
            }
        } else {
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

}

export default Navs