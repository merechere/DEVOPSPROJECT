<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROJET GESTION DES COMMANDES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    @include('../menu')
    <div class="container">
        <a href="/produit/add" type="button" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Ajouter un produit</a>
        <br>
        <br>
		<h1>Liste des produits</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
                    <th>quantite</th>
                    <th>prix</th>
                    <th>categorie</th>
                    <th>fournisseur</th>
                    <th>Action</th>
                    
				</tr>
			</thead>
			<tbody>
                @foreach ($produits as $produit) 
				<tr>
					<td>{{$produit->id}}</td>
					<td>{{$produit->nom}}</td>
                    <td>{{$produit->quantite}}</td>
                    <td>{{$produit->prix}}</td>
                    <td>{{$produit->categorie->nom}}</td>
                    <td>{{$produit->fournisseur->nom}}</td>
                    <td>
                        <a href="{{route('edit_produit',$produit->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{route('delete_produit',$produit->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet produit?');"><i class="fas fa-trash-alt"></i> Delete</a>

                    </td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

    
</body>
</html>