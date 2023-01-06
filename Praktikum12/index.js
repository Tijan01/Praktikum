let input = document.getElementById('search-input');
let cardContainer = document.getElementById('card-section')
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '69f54ac8b6mshb3372a1585b7a2dp1f7bbfjsn000bebc971f8',
		'X-RapidAPI-Host': 'spotify23.p.rapidapi.com'
	}
};

document.getElementById('search').addEventListener('click',(e)=>{
  e.preventDefault();
  let endpoint = `https://spotify23.p.rapidapi.com/search/?q=${input.value}&type=artists&offset=0&limit=6&numberOfTopResults=5`;

  fetch(endpoint, options)
	.then(response => response.json())
	.then(dat => {
    // console.log(data.tracks.items)
    // let dataArr = artists.items
    // console.log(dat.artists.items[0].data)
    
    let j
    cardContainer.innerHTML = '';
    let datArr = dat.artists.items
    for(let i = 0;i<datArr.length;i++){
      // console.log(datArr[i].data)
      
      cardContainer.innerHTML += `
                      <div class="card">

                          <div class="img">
                            <img height="200px" width="200px" src="${datArr[i].data.visuals.avatarImage.sources[0].url}" alt="">
                          </div>
                          
                        <div class="description">
                            <h3></h3>
                            <a href="${datArr[i].data.uri}" target="_blank">Link to the song</a>
                        </div>
                    </div>
                `;
      
    }
    
    // let itemsArr 

    // datArr.forEach(element => {
    //   let i
    //   console.log(elemen.artists)
    // });

    
    // cardContainer.innerHTML = '';
    //   cardContainer.innerHTML += `
                   
    //                     <div class="description">
    //                         <h3></h3>
    //                         <a href="${dat.artists.items[0].data.uri}" target="_blank">Link to the song</a>
    //                     </div>
    //                 </div>
    //             `;
      
    
    // let dataArr = data.artists.items


    // for (let i =0; i<1; i++){
    //   console.log(dataArr[i])
    // }
    
  })
	function getStuff() { 
    return fetchStuff().then(stuff => 
      process(stuff)
    ).catch(err => {
      console.error(err);
    });
  }
  // .catch(err => console.log(err))

})

