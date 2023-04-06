
<body>
    @include('../menu')

    <div class="container">
        <a href="/categorie/add" type="button" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Ajouter une catégorie</a>
        <br>
        <br>
		<h1>Liste de catégories</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($categories as $categorie) 
				<tr>
					<td>{{$categorie->id}}</td>
					<td>{{$categorie->nom}}</td>
                    <td>
                        <a href="{{route('edit_categorie',$categorie->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_categorie',$categorie->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>