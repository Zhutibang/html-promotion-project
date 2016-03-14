'use strict'

const fs = require('fs')
const path = require('path')

let result = []

fs.readdirSync('./').filter((filename) => {
    if (!filename.startsWith('.') && fs.statSync(filename).isDirectory()) {
        return true
    }
    return false
}).forEach((filename) => {
    let config_json = require(path.join(__dirname, filename+'/.html5/config.json'))
    result.push(config_json)
})

fs.writeFileSync('project.json', JSON.stringify(result, null, 0), {encoding: 'utf-8'})
console.log('generate ok!')

