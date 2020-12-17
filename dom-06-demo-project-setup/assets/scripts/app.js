const addMovieModalElement = document.getElementById('add-modal');
// const addMovieModal2 = document.querySelector('#add-modal');
// const addMovieModal3 = document.body.children[1];

const startAddMovieButton = document.querySelector('header button');

//get backdrop changed
const changeBackdropElement = document.getElementById('backdrop');

//use cancel to get back to the home page
const cancelAddMovieButton = addMovieModalElement.querySelector('.btn--passive');

//add a movie from the input
const confirmAddAddMovieButton =cancelAddMovieButton.nextElementSibling;

//get the form inputs in a variable
const userInputs = addMovieModalElement.querySelectorAll('input');
//const userInputs = addMovieModalElement.getElementsByTagName('inputs');

const hideDatabase = document.getElementById('entry-text');

//collect all the inputs by the usr
const movies = [];

//update the user interface

const updateUI = () => {
  if (movies.length === 0) {
    hideDatabase.style.display = 'block'
  } else {
    hideDatabase.style.display = 'none'
  }
}

const deleteMovieHandler = (movieId) => {
  let movieIndex = 0;
  for (const movie of movies) {
    if (movie.id === movieId) {
      break;
    }
    movieIndex++;
  }
  movies.splice(movieIndex, 1);
  const listRoot = document.getElementById('movie-list');
  listRoot.children[movieIndex].remove();
  // listRoot.removeChild(listRoot.children[movieIndex]);
};

const addNewMovies = (title, imageUrl, rating) => {
  const newMovieElement = document.createElement('li');
  newMovieElement.className = 'movie-element';
  newMovieElement.innerHTML = 
  `<div class = "movie_element__image">
  <img src="${imageUrl}" alt=${title}>
  </div>
  <div class = "movie_element__info">
  <h2>${title}</h2>
  <p>${rating}/5 stars</p>
  </div>
  `;

  newMovieElement.addEventListener('click',deleteMovieHandler.bind(null, id));

  const listRoot = document.getElementById('movie-list');
  listRoot.append(newMovieElement);
};

//toggle backdrop
const toggleBackdrop = () => {
  changeBackdropElement.classList.toggle('visible');
};

//get back to the previous screen
const backDropClickHandler = () => {
  toggleMovieModal();
};

//const startAddMOvieButton = document.querySelector('header').lastElementChild;
const toggleMovieModal = () => {  // alternative to use regular function.function(){}
  addMovieModalElement.classList.toggle('visible');
  toggleBackdrop();
};

const cancelAddMovie = () => {
  toggleMovieModal();
  clearMovieInputs();
};

const clearMovieInputs = () => {
  // userInputs[0].value = '';
  // userInputs[1].value = '';
  // userInputs[2].value = '';

  for (const userInput of userInputs) {
    userInput.value = '';
  }
};

const addMovieHandler = () => {
  const titleValue = userInputs[0].value;
  const urlValue = userInputs[1].value;
  const ratingValue = userInputs[2].value;

  if (titleValue.trim() === '' ||
    urlValue.trim() === '' ||
    ratingValue.trim() === '' || + ratingValue < 1 || + ratingValue > 5)
  {
    alert("All the fields are required!");
    return;
  }
  const newMovies = {
    id: Math.random().toString(),
    title: titleValue,
    image: urlValue,
    rating: ratingValue
  }
  movies.push(newMovies);
 
  toggleMovieModal();
  updateUI();
  addNewMovies(newMovies.id, newMovies.title, newMovies.image, newMovies.rating);
  clearMovieInputs();
};

startAddMovieButton.addEventListener('click', toggleMovieModal);

//go back to the previous page
changeBackdropElement.addEventListener('click', backDropClickHandler)

cancelAddMovieButton.addEventListener('click', cancelAddMovie)

confirmAddAddMovieButton.addEventListener('click', addMovieHandler)
