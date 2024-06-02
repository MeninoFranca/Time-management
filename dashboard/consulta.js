function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function getMonthName() {
    const months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    const now = new Date();
    return months[now.getMonth()];
}
document.getElementById('horas-trabalhadas').innerText = "Horas trabalhadas em " + getMonthName();

document.addEventListener('DOMContentLoaded', () => {
    fetch('get_total_mes.php')
        .then(response => response.text())
            .then(data => {
                document.getElementById('resultado-mes').innerText = data;
        })
            .catch(error => {
                console.error('Ocorreu um erro:', error);
        });
});

document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('DOMContentLoaded', () => {
        fetch('get_horas_semanais.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('resultado-semanal').innerText = data.TotalHorasTrabalhadas;
            })
            .catch(error => {
                console.error('Ocorreu um erro:', error);
            });
    });    
});

document.addEventListener('DOMContentLoaded', () => {
    fetch('get_horas_diarias.php')
        .then(response => response.json())
        .then(data => {
            const dias = Object.keys(data);
            const horasTrabalhadas = Object.values(data).map(horas => {
                const [hours, minutes, seconds] = horas.split(':').map(Number);
                return (hours + minutes / 60 + seconds / 3600).toFixed(2);
            });

});
});