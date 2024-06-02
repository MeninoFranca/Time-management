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
