(function(){
    
    console.log('vive le carrousel')
    let galerie__img = document.querySelectorAll('.blocks-gallery-grid img')
    console.log( galerie__img.length)
    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation')
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img')
    
    /* Création d'un élément img */

    /* on parcour chacune des img de la galerie */
    let index = 0
    for (const img of galerie__img) {
        /* Insertion de chacune des images de la galerie  dans la boite__carrousel */
        let elmImg = document.createElement('img')
        elmImg.setAttribute('src', img.getAttribute('src'))
        console.log("elmImg src = " + elmImg.getAttribute('src'))
        boite__carrousel__img.append(elmImg)

        /* Creation des boutons radio */
        let bouton = document.createElement('input')
        bouton.setAttribute('type','radio')
        bouton.setAttribute('class','bouton')
        bouton.setAttribute('name','bouton')
        bouton.checked = false
        bouton.dataset.index = index
        boite__carrousel__navigation.append(bouton)

        /* On écoute mousedown sur chacun des boutons */
        let prec = null
        bouton.addEventListener('mousedown', function(e){
            e.preventDefault
            console.log(e)
            if (prec){
                console.log("prec.dataset.index = " + prec.dataset.index)
            }
            if(this !== prec){
                prec=this
            }
            
            let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
            for (let i=0 ; i<collectionImg.length; i++){
                console.log("boite__carrousel__navigation.children[i].checked = " + boite__carrousel__navigation.children[i].checked + " i= " + i)
                if(boite__carrousel__navigation.children[i].checked == true){ // le radio précédent sélectionné
                    console.log("boite__carrousel__navigation.children[i].checked" + i)
                    collectionImg[i].classList.remove('img--ouvrir') // on retire l'image de la dernière image affiché
                }
            }
         
        })


        /* Ouvrir la boite__carrousel */
        img.addEventListener('mousedown', function(){
           // console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
          //  console.log(this.getAttribute('src'))
           // elmImg.setAttribute('src', this.getAttribute('src'))
            initialise__carrousel__img()
            boite__carrousel__img.children[0].classList.add('img--ouvrir')
            boite__carrousel__navigation.children[0].checked = true
        })
       index++ 
    }

    function initialise__carrousel__img(){
        let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
        
        console.log(collectionImg.length)
        //console.log("boite__carrousel__navigation.children[i].checked = " + boite__carrousel__navigation.children[i].checked + " i= " + i)

      }

    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })



})()
