import axios from "axios"

class Welcome {
    constructor() {
        this.startButton();    
        this.interests = [];
        this.products = [];
        this.items = [];
        this.contacts = [];
        this.name = '';
        this.email = '';
        this.phone = '';
    }

    startButton() {
        const btn = document.getElementById('start')

        if (btn) {
            btn.addEventListener('click', (e) => {
                this.startMeet()
            })

            this.meetInterests()
            this.meetProducts()
            this.meetBoxes()
        }

    }

    meetBoxes() {
        const list = document.getElementById('meetBoxes')
        const boxes = list.querySelectorAll('input[type="checkbox"]')
        const name = document.getElementById('meetName')
        const email = document.getElementById('meetEmail')
        const phone = document.getElementById('meetPhone')

        boxes.forEach(box => {
            box.addEventListener('click', (e) => {
                box.classList.toggle('checked') 
                
                if (box.classList.contains('checked')) {
                    this.contacts.push(box.value)
                } else {
                    const index = this.contacts.findIndex(element => element === box.value);
                    if (index !== -1) {
                        this.contacts.splice(index, 1); 
                    }
                }                
                
            })
        })

        name.addEventListener('input', (e) => {
            this.name = name.value;
        })
        
        email.addEventListener('input', (e) => {
            this.email = email.value;
        })
        
        phone.addEventListener('input', (e) => {
            this.phone = phone.value;
        })
    }

    meetInterests() {
        const list = document.getElementById('meetInterest')
        const terms = list.querySelectorAll('.term')

        terms.forEach(term => {
            term.addEventListener('click', (e) => {
                term.classList.toggle('term--checked')

                if (term.classList.contains('term--checked')) {
                    this.interests.push(term.dataset.id)
                } else {
                    const index = this.interests.findIndex(element => element === term.dataset.id);
                    if (index !== -1) {
                        this.interests.splice(index, 1); 
                    }
                }
              
            })
        })
    }

    meetProducts() {
        const list = document.getElementById('meetProducts')
        const terms = list.querySelectorAll('.term')

        terms.forEach(term => {
            term.addEventListener('click', (e) => {
                term.classList.toggle('term--checked')

                if (term.classList.contains('term--checked')) {
                    this.products.push(term.dataset.id)
                } else {
                    const index = this.products.findIndex(element => element === term.dataset.id);
                    if (index !== -1) {
                        this.products.splice(index, 1); 
                    }
                }

            })
        })
    }

    meetLists(counter) {

        const wrapper = document.getElementById('meetLists')
        const header = wrapper.querySelector('.term-name')
        const current = wrapper.querySelector('.current')
        current.innerText = counter + 1;
        const all = wrapper.querySelector('.all')
        const container = wrapper.querySelector('.terms')
        all.innerText = this.products.length

        if ( this.products[counter] !== undefined) {
            let parent = daportalData.root_url + '/wp-json/wp/v2/products/' + this.products[counter];
       
            axios.get(parent)
            .then(response => {
                header.innerText = response.data.name

            })
            .catch(error => {
                console.error('There was an error!', error);
            });

            
            let route = daportalData.root_url + '/wp-json/wp/v2/products?parent=' + this.products[counter];

            axios.get(route)
            .then(response => {

                if (response.data.length > 0) {
                    container.innerText = '';
                    response.data.forEach(item => {
                        const div = document.createElement('div');
                        div.className = 'term';
                        div.setAttribute('data-id', item.id);
                        div.textContent = item.name;

                        const index = this.items.findIndex(element => element == item.id);
                        
                        if (index !== -1) {
                            div.classList.add('term--checked');
                        }
                        container.appendChild(div);
                    })


                } else {
                    container.innerText = 'Тут нет подкатегорий =('
                }

                const terms = container.querySelectorAll('.term');

                terms.forEach(term => {
                    term.addEventListener('click', (e) => {
                        term.classList.toggle('term--checked')

                        if (term.classList.contains('term--checked')) {
                            this.items.push(term.dataset.id)
                        } else {
                            const index = this.items.findIndex(element => element === term.dataset.id);
                            if (index !== -1) {
                                this.items.splice(index, 1); 
                            }
                        }

                        
                    })
                })

            })
            .catch(error => {
                console.error('There was an error!', error);
            });
        } else {
            container.innerText = 'Вы ничего не выбрали!';
        }

    }    

    startMeet() {
        const heads = document.querySelectorAll('.head-welcome')
        const foots = document.querySelectorAll('.foot-welcome')

        heads.forEach(head => {
            
            if (head.dataset.id == 0) {
                head.classList.add('welcome--hidden')
            }

            if (head.dataset.id == 1) {
                head.classList.remove('welcome--hidden')
            }
        })

        foots.forEach(foot => {
            const prev = foot.querySelector('.back-button')
            const next = foot.querySelector('.next-button')
 

            if (next) {
                next.addEventListener('click', (e) => {                    

                    if (foot.dataset.id == '2') {
                        this.meetLists(0)
                    }

                    if (foot.dataset.id == '3') {
                        const counter = document.getElementById('meetCounter');
                        const number = +counter.innerText;

                        if (number < this.products.length) {                            
                            this.meetLists(number)
                        } else {
                            this.showWindow(heads, foots, +foot.dataset.id + 1)
                        }
                        
                    } else if (foot.dataset.id == '5') {

                        const formData = new FormData();
                        formData.append('action', 'welcome_form');
                        formData.append('interests', this.interests);
                        formData.append('products', [...this.products, ...this.items]);
                        formData.append('contacts', this.contacts);
                        formData.append('name', this.name);
                        formData.append('email', this.email);
                        formData.append('phone', this.phone);

                        axios.post(daportalData.ajax_url, formData)
                        .then(response => {
                            console.log('Response:', response.data);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });


                        this.showWindow(heads, foots, +foot.dataset.id + 1)                          
                    } else if (foot.dataset.id == '6') {                 
                        this.showWindow(heads, foots, 0)
                    } else {
                        this.showWindow(heads, foots, +foot.dataset.id + 1)
                    }
         
                    
                })

                if (prev) {
    
                    prev.addEventListener('click', (e) => {

                        if (foot.dataset.id == '3') {
                            const counter = document.getElementById('meetCounter');
                            const number = +counter.innerText;                            
    
                            if (number > 1) {  
                                                        
                                this.meetLists(number - 2)
                            } else {
                                this.showWindow(heads, foots, +foot.dataset.id - 1)
                            }
                            
                        } else {
                            this.showWindow(heads, foots, +foot.dataset.id - 1)
                        }
                                       
                    })
                }

            }


            if (foot.dataset.id == 0) {
                foot.classList.add('welcome--hidden')
            }

            if (foot.dataset.id == 1) {
                foot.classList.remove('welcome--hidden')
            }
        })
    }

    showWindow(heads, foots, id) {
        
        heads.forEach(head => {
            
            if (head.dataset.id == id) {
                head.classList.remove('welcome--hidden')
            } else {
                head.classList.add('welcome--hidden')
            }

        })

        foots.forEach(foot => {
            
            if (foot.dataset.id == id) {
                foot.classList.remove('welcome--hidden')
            } else {
                foot.classList.add('welcome--hidden')
            }

        })
    }


}

export default Welcome