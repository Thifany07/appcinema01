<!-- Modal -->
<div class="modal fade" id="modalAlterarFilme-{{$dadosfilmes->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alterar Filme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <form method = "post" action="{{route('cadastro-filme')}}">
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" name="nomefilme" value="{{$dadosfilmes->nomefilme}}" class="form-control" id="filmeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">Atores:</label>
                <input type="text" name="atoresfilme" value="{{$dadosfilmes->atoresfilme}}" class="form-control" id="atoresInput">
            </div>

            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">Lançamento:</label>
                <input type="text" name="datalancamentofilme" value="{{$dadosfilmes->datalancamentofilme}}" class="form-control" id="dataLancamentoInput" >
            </div>
            
            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">Sinopse:</label>
                <input type="text" name="sinopsefilme" value="{{$dadosfilmes->sinopsefilme}}" class="form-control" id="sinopseInput">
            </div>

           
         

           
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>

      
    
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>