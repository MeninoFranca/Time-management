function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

document.addEventListener('DOMContentLoaded', (event) => {
    const dataInput = document.getElementById('data');
    const entradaInput = document.getElementById('entrada');
    const inicioAlmocoInput = document.getElementById('inicio_almoco');
    const fimAlmocoInput = document.getElementById('fim_almoco');
    const saidaInput = document.getElementById('saida');

    const today = new Date().toISOString().split('T')[0];
    dataInput.value = today;

    
    if (localStorage.getItem('entrada')) {
        entradaInput.value = localStorage.getItem('entrada');
    }
    if (localStorage.getItem('inicio_almoco')) {
        inicioAlmocoInput.value = localStorage.getItem('inicio_almoco');
    }
    if (localStorage.getItem('fim_almoco')) {
        fimAlmocoInput.value = localStorage.getItem('fim_almoco');
    }
    if (localStorage.getItem('saida')) {
        saidaInput.value = localStorage.getItem('saida');
    }

    let clickCount = 0;

    document.getElementById('registrar-horario').addEventListener('click', () => {
        clickCount++;
        const now = new Date();
        const timeString = now.toTimeString().split(' ')[0].substring(0, 5); 

        if (!entradaInput.value) {
            entradaInput.value = timeString;
            localStorage.setItem('entrada', timeString);
        } else if (!inicioAlmocoInput.value) {
            inicioAlmocoInput.value = timeString;
            localStorage.setItem('inicio_almoco', timeString);
        } else if (!fimAlmocoInput.value) {
            fimAlmocoInput.value = timeString;
            localStorage.setItem('fim_almoco', timeString);
        } else if (!saidaInput.value) {
            saidaInput.value = timeString;
            localStorage.setItem('saida', timeString);
            document.querySelector('form').submit();
        }
    });
});

