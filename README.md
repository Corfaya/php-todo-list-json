# TRACCIA
## Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
L'esercizio base è considerato completato quando mostrerete in un console log i dati inviati dal server. Non ci interessa che li mostriate a video nella pagina. In allegato avete il file json da utilizzare per l'esercizio.

## Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

## Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

## BONUS
- Visualizzare le task nella pagina
- Mostrare lo stato del task → se completato, barrare il testo
- Permettere di segnare un task come completato facendo click sul testo
- Permettere il toggle del task (completato/non completato)
- Abilitare l’eliminazione di un task

## json
[
    { "id" : 1, "done": true, "name": "HTML" },
    { "id" : 2, "done": false, "name": "CSS" },
    { "id" : 3, "done": true, "name": "Responsive design" },
    { "id" : 4, "done": false, "name": "JavaScript" },
    { "id" : 5, "done": true, "name": "PHP" }
]

# Flow
- Creazione struttura repo:
    - index.php + server.php
    - dir "data" con *.json
    - dir "js" con script per vue application
    - dir "css" per eventuale stile

- Installazione tramite CDN:
    - Bootstrap CSS
    - AXIOS
    - VueJS

- Nel file server.php
    - Recuperare i dati del json sotto forma di stringa, tramite il metodo file_get_contents()

- Istanza di applicazione di Vue nello script.js
    - Nei data()
        - Array vuoto
        - Endpoint per la chiamata al server assegnato a una variabile
    - Nei methods
        - Effettuare richiesta GET tramite axios
        - Mostrare in console
    - Nel mounted()
        - Richiamare la funzione