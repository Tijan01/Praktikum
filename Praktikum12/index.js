
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '69f54ac8b6mshb3372a1585b7a2dp1f7bbfjsn000bebc971f8',
		'X-RapidAPI-Host': 'spotify23.p.rapidapi.com'
	}
};

fetch('https://spotify23.p.rapidapi.com/search/?q=%3CREQUIRED%3E&type=multi&offset=0&limit=10&numberOfTopResults=5', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));