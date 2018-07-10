const scriptURL = 'https://script.google.com/macros/s/AKfycbzZJR8dP3IX2M2Kyngm7vzJeL3UcrBuItsEowCt9UDR5Vr82wyH/exec'
const form = document.forms['contact']
form.addEventListener('submit', e => {
 confirm("Gracias por su mensaje. Nos pondremos en contacto con usted a la brevedad.")
 e.preventDefault()
 fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => console.log('Success!', response))
  .catch(error => console.error('Error!', error.message))
})
