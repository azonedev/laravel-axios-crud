function store() {

	let	name = document.getElementById('name').value;
	let	email = document.getElementById('email').value;

	let data = {
		name:name,
		email:email
	}

	axios.post('/store',data)
	.then(function(response){
		alert(response.data);
	})
	.catch(function(error){
		alert(error);
	})
}

function del(id){
	let del = confirm('Are you sure to delete paramently ? ');
	let data = {
		id:id
	}
	if (del ==true) {
		axios.post('/delete',data)
		.then(function(response){
			alert(response.data);
		})
		.catch(function(error){
			alert(error);
		})
	}

}
