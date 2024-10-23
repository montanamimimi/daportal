class Steps {
    constructor() {
        this.findSteps();
    }

    findSteps() {
        const steps = document.querySelectorAll('.steps')

        if (steps.length > 0) {
            window.addEventListener('scroll', (e) => {
                
                const height = window.innerHeight;
                this.checkElements(steps, height)
            })
        }
    }

    checkElements(steps, height) {

        steps.forEach(step => {
            const blocks = step.querySelectorAll('.step')

            blocks.forEach(block => {
                const rect = block.getBoundingClientRect();

                const isInMiddle = (rect.top + rect.height / 2) >= (height / 2 - 50) && 
                                   (rect.top + rect.height / 2) <= (height / 2 + 50);

                if (isInMiddle) {
                    this.changeBorder(blocks, block.dataset.id)            
                }                                
            })
        })
        
        
    }

    changeBorder(blocks, id) {
        blocks.forEach(block => {
            if (id == block.dataset.id) {
                block.classList.add('border-bald')
            } else {
                block.classList.remove('border-bald')
            }
        })
    }
}

export default Steps