$(function () {
  var operation = "C"; //"C"=Criar
  var selected_index = -1; // Indice do elemento selecionado na lista
  var tblPersons = localStorage.getItem("tblPersons"); //Retornar dados
  tblPersons = JSON.parse(tblPersons); //Converter String para Object
  if (tblPersons === null) // Se não tem dados, inicializar um array vazio
      tblPersons = [];

  function Create() {
    //obter os dados do html e transformá-los em String.
    var person = JSON.stringify({
      ID: $("#txtID").val(),
      Name: $("#txtName").val(),
	  Academia: $("#txtAcademia").val(),
      Phone: $("#txtPhone").val(),
      Email: $("#txtEmail").val()
    }); 
    //adicionar o objeto a tabela
    tblPersons.push(person);
    //armazenar dados no Local Storage
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons));
    alert("Os dados foram armazenados"); //Mensagem de alerta
    return true;
  }

  function Edit() {
    // Editar o item selecionado na tabela
    tblPersons[selected_index] = JSON.stringify({
        ID: $("#txtID").val(),
        Name: $("#txtName").val(),
		Academia: $("#txtAcademia").val(),
        Phone: $("#txtPhone").val(),
        Email: $("#txtEmail").val()
    });
    //armazenar dados no Local Storage
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons)); 
    alert("Os dados foram editados"); //Mensagem de alerta
    return true;
  }

  function Delete() {
    //Deletar dado selecionado na tabela
    tblPersons.splice(selected_index, 1); 
    //Atualizar dados do Local Storage
    localStorage.setItem("tblPersons", JSON.stringify(tblPersons)); 
    alert("Pessoa foi deletada"); //Mensagem de alerta
  }

  function List() {
    $("#tblList").html("");
    $("#tblList").html(
            "<thead>" +
            "<tr>" +                
            "<th>ID</th>" +
            "<th>Nome</th>" +
			"<th>Academia</th>" +
            "<th>Telefone</th>" +
            "<th>Email</th>" +
            "<th>Ações</th>" +
            "</tr>" +
            "</thead>" +
            "<tbody>" +
            "</tbody>"
            ); //Adicionar a tabela ao HTML
    for (var i in tblPersons) {
        var per = JSON.parse(tblPersons[i]);
        $("#tblList tbody").append("<tr>" +                    
                "<td>" + per.ID + "</td>" +
                "<td>" + per.Name + "</td>" +
				"<td>" + per.Academia + "</td>" +
                "<td>" + per.Phone + "</td>" +
                "<td>" + per.Email + "</td>" +                    
                "<td><img src='edit.png' alt='Edit" + i + "' class='btnEdit'/>&nbsp &nbsp<img src='delete.png' alt='Delete" + i + "' class='btnDelete'/></td>" +
                "</tr>"
                );
    } //Percorrer e adicionar itens à tabela HTML
  }

  $("#frmPerson").bind("submit", function () {
    if (operation === "C")
        return Create();
    else
        return Edit();
  }); //Função para decidir se você está adicionando ou editando um item
  
  List();

  $(".btnEdit").bind("click", function () {
    operation = "E"; //"E" = Editar
    //Obter o identificador do item a ser editado
    selected_index = parseInt($(this).attr("alt").replace("Edit", ""));
    //Converter de JSON para o formato adequado para editar dados
    var per = JSON.parse(tblPersons[selected_index]); 
    $("#txtID").val(per.ID);
    $("#txtName").val(per.Name);
	$("txtAcademia").val(per.Academia);
    $("#txtPhone").val(per.Phone);
    $("#txtEmail").val(per.Email);
    $("#txtID").attr("readonly", "readonly");
    $("#txtName").focus();
  });

  $(".btnDelete").bind("click", function () {
    //Obter o identificador do item a ser removido
    selected_index = parseInt($(this).attr("alt").replace("Delete", "")); 
    Delete(); //Deletar o item
    List(); //Listar os itens na tabela novamente
  });
});

