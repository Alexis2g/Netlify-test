let http = require('http')
const port = 1337

let fs = require('fs')

let serveur = http.createServer(function (req, res) {
    Response.write('Hello Node')
    res.end()
})

/*
serveur.on('request', (request, reponse) => {

    fs.readFile('./index', 'utf-8', function(err, data) {

        if (err) {

            Response.writeHead(404)

            Response.end('existe pas')

        } else

        reponse.writeHead(200, {
            'Content-type': 'text/html; charset=utf-8'

    })


    })
    
    reponse.end(data) 

})
*/
serveur.listen(port, function(error) {
    if (error) {
        console.log('There is an error', error)
    } else {
        console.log('Server is listening on port ' + port)
        }
    })