fetch('expression.txt')
.then(res => res.json())
.then(data => console.log(data))
.then(document.body.appendChild(data))

