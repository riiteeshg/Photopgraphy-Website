// images to be used during shuffle for each class/size of image container
// make sure these arrays contain all the images from the html file
var imagesClass0 = ["photos/dani.jpg", "photos/port.jpg"];
var imagesClass1 = ["photos/devin.png", "photos/daniel2.jpeg"];
var imagesClass2 = ["photos/grad2.png", "photos/duo.jpeg"];
var imagesClass3 = ["photos/grad.jpg", "photos/port4.jpeg"];
var imagesClass4 = ["photos/TJ.jpeg", "photos/tt.jpg"];
var imagesClass5 = ["photos/mikey.jpeg", "photos/clara.jpeg"];
var imagesClass6 = ["photos/wind.jpeg", "photos/Jas.jpg"];
var imagesClass7 = ["photos/dani2.jpg", "photos/pew.jpg"];
var imagesClass8 = ["photos/liz.jpg", "photos/port3.jpg"];
var imagesClass9 = ["photos/imgAbout.jpg", "photos/port2.jpg"];

var imageArray = [imagesClass0, imagesClass1, imagesClass2, imagesClass3, imagesClass4, imagesClass5, imagesClass6, imagesClass7, imagesClass8, imagesClass9];

// listener that starts the shuffle
document.getElementById("shuffle").addEventListener("click", function(){ shuffle(); } );

function shuffle(){    
    // number of Sections of images (11 images in a section)
    numberOfSections = document.getElementsByClassName("imgSection").length;

    // array to save the images randomly selected from the arrays
    selectedArray = [[], [], [], [], [], [], [], [], [], []];

    // for loops that make the source of each image a file from that container's array of images
    for (sectionNumber = 0; sectionNumber < numberOfSections; sectionNumber++){
        for (imgClass = 0; imgClass < 10; imgClass++){  

            // image selected randomly from image array for that container
            randomIndex = Math.random() * imageArray[imgClass].length | 0;
            selectedImage = imageArray[imgClass][randomIndex];
            selectedArray[imgClass].push(selectedImage);
            
            // selected image is removed from the image array so it is not reused
            imageArray[imgClass].splice(randomIndex, 1);

            // gets the id number to put the image source into
            containerIndex = imgClass + (sectionNumber * 10);
            document.getElementById("img" + containerIndex).src = selectedImage;
        }
    }

    // after shuffle is complete, all selected images are returned to their arrays for use in the next shuffle
    for (sectionNumber = 0; sectionNumber < numberOfSections; sectionNumber++){
        imagesClass0.push(selectedArray[0][sectionNumber]);
        imagesClass1.push(selectedArray[1][sectionNumber]);
        imagesClass2.push(selectedArray[2][sectionNumber]);
        imagesClass3.push(selectedArray[3][sectionNumber]);
        imagesClass4.push(selectedArray[4][sectionNumber]);
        imagesClass5.push(selectedArray[5][sectionNumber]);
        imagesClass6.push(selectedArray[6][sectionNumber]);
        imagesClass7.push(selectedArray[7][sectionNumber]);
        imagesClass8.push(selectedArray[8][sectionNumber]);
        imagesClass9.push(selectedArray[9][sectionNumber]);
    }
}


/*
Christauns modal code
*/

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName("myImg");
//img += document.getElementsByClassName("img2");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var which=0;
for(i=0;i< img.length;i++){    
    img[i].onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
	    which=this.alt;
        if(which<img.length) 
            Nextt.src=img[which].src;
	    Prevv.src=img[which-2].src;
    }
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
   modal.style.display = "none";
}
var Nextt = document.getElementsByClassName("Next")[0];
Nextt.onclick = function() { 
	
	var img = document.getElementsByClassName("myImg");
	triggerEvent(img[which],'click');
}
var Prevv= document.getElementsByClassName("Prev")[0];
Prevv.onclick = function() { 
	
	var img = document.getElementsByClassName("myImg");
	triggerEvent(img[which-2],'click');
}

function triggerEvent( elem, event ) {
  var clickEvent = new Event( event ); // Create the event.
  elem.dispatchEvent( clickEvent );    // Dispatch the event.
}   