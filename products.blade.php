<HTML> 

<HEAD> 

<TITLE>PRUEBA TECNI-SUPPORT</TITLE> 

</HEAD> 

<BODY> 

<?php foreach ($products as $product): ?>
		<p>
			<?=$product['id']?>, <?=$product['name']?>, <?=$product['stock']?>
		</p>
<?php endforeach ?>


<HR> 

	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif

<form id="frmPro" method="post" action="products/save">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<p>

<label for="id">ID: </label>

<input type="text" name="id" id="id" value="{{old('id')}}">

<br/> <br/>

<label for="name">Name: </label>

<input type="text" name="name" id="name" value="{{old('name')}}">

<br/> <br/>

<label for="stock">Stock: </label>

<input type="text" name="stock" id="stock" value="{{old('stock')}}">

<br/> <br/>

<button name="btnSend" value="save">Save.</button>
<button name="btnSend" value="delete">Delete.</button>

</p>

</form>


</BODY> 

</HTML> 