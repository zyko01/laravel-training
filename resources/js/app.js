require('./bootstrap');


new Vue({
	el: '#root',

	mounted() {
		axios.get('./skills').then(response => console.log(response));
	}
});
