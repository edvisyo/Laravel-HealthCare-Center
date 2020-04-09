document.getElementById('otherSpec').addEventListener('click', function() {
    var hiddenInput = document.getElementById('hiddenSpecInput');
    hiddenInput.style.display = 'block';
});

document.getElementById('closeHiddenSpecInput').addEventListener('click', function() {
    var hiddenInput = document.getElementById('hiddenSpecInput');
    hiddenInput.style.display = 'none';
})
