<!-- Modal -->
<div class="modal fade" id="modalDeleteFilme-{{$dadosfilmes->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Excluir Funcionário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Deseja excluir o filme: {{$dadosfilmes->id}} ?</br>
        Esta operação não podera ser revertida.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
       
        <form method="post" action="{{route('apagar-filme',$dadosfilmes->id)}}">
            @method('delete')
            @csrf 
            <button type="submit" class="btn btn-danger"> Excluir </button>
        </form>
      </div>
    </div>
  </div>
</div>