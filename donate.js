document.addEventListener('DOMContentLoaded', function() {
    const donationForm = document.getElementById('donationForm');
  
    donationForm.addEventListener('submit', function(event) {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const address = document.getElementById('address').value.trim();
      const donationType = document.getElementById('donationType').value.trim();
      const amount = document.getElementById('amount').value.trim();
  
      let errorMessage = '';
  
      if (name === '' || email === '' || address === '' || donationType === '' || amount === '') {
        errorMessage = 'All fields are required';
      } else if (!validateEmail(email)) {
        errorMessage = 'Invalid email address';
      } else if (!validateAmount(amount)) {
        errorMessage = 'Invalid donation amount';
      }
  
      if (errorMessage) {
        event.preventDefault();
        document.getElementById('errorMessage').textContent = errorMessage;
      }
    });
  
    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }
  
    function validateAmount(amount) {
      return /^\d*\.?\d*$/.test(amount) && parseFloat(amount) > 0;
    }
  });
  