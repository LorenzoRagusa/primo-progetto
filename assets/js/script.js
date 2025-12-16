// Aggiorna automaticamente l'anno nel footer

date = new Date();

// document.getElementById('year').textContent = date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear();
$("#year").text(date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear()); 

document.getElementById('clickMe').addEventListener('click', function() {
    alert('Hai cliccato il pulsante!');
});
