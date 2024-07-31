const formEls = document.querySelectorAll('form.form-destroyer');

formEls.forEach((formEls)=>{
    formEls.addEventListener('submit',function(event){
        event.preventDefault();
        const userChoice = window.confirm('Are you sure you want to delete' + this.getAtribute('data-post-name')+'?');
        if (userChoice) {
            this.submit();

        }
    });
});
