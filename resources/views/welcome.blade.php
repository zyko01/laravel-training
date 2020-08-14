<!DOCTYPE html>

<html>

<head>
	<title></title>

<style>
	.is-complete {
      text-decoration: line-through;
	}
</style>
</head>

<body>
	
	<div class="container" id="root">
		
		@yield('content')

		<ul>
			<li v-for="skill in skills" v-text="skill"></li>
		</ul>

	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	{{-- <script src="/js/app.js"></script> --}}

	<script>
		new Vue({
			el: '#root',

			data() {
				return {
					skills: []
				}
			},

			mounted() {
				axios.get('./skills').then(response => this.skills = response.data);
			}
		});
	</script>

</body>

</html