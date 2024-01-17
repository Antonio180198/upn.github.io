window.addEventListener('DOMContentLoaded', () => {
    const search = document.querySelector('#search')
    const tableContainer = document.querySelector('#results tbody')
    const resultsContainer = document.querySelector('#resultsContainer')
    const errorsContainer = document.querySelector('.errors-container')
    let search_criteria = ''

    if (search){
        search.addEventListener('input', event => {
            search_criteria = event.target.value.toUpperCase()
            showResults()
        })
    }

    //enviar peticion usando fetch
    const searchData = async () => {
        let searchData = new FormData()
        searchData.append('search_criteria', search_criteria)

        try {
            const response = await fetch('./Admin/buscar_dotos.php',{
                method: 'POST',
                body: searchData
            })

            return response.json()
        } catch (error){
           alert(`${'Hubo un error. Razones:'}${error.message}`)
           console.log(error) 
        }
    
    }
        //funcion para mostrar todos los datos

    const showResults = () => {
        searchData()
        .then(dataResults => {
            console.log(dataResults)
            tableContainer.innerHTML = ''
            if(typeof dataResults.data !== 'undefined' && !dataResults.data){
                errorsContainer.style.display = 'block'
                errorsContainer.querySelector('p').innerHTML = `
                No hay resultados de busqueda: <span class="bold">${search_criteria}</span>`
                resultsContainer.style.display = 'none'
            } else {
                resultsContainer.style.display = 'block'
                errorsContainer.style.display = 'none'
                
            }
        })
    }
})