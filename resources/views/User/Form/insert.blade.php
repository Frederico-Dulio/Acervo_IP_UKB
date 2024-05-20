<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Livro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" required>
                                <label for="gname">Titulo do livro</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="gmail" placeholder="Gurdian Email" required>
                                <label for="gmail">Autor</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option selected disabled>Categoria</option>
                                    <option value="ficcao">Ficção</option>
                                    <option value="nao-ficcao">Não-Ficção</option>
                                    <option value="infantil">Infantil</option>
                                    <option value="juvenil">Juvenil</option>
                                    <option value="academicos">Acadêmicos e Técnicos</option>
                                    <option value="outros">Outros Gêneros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="cage" placeholder="Child Age" required>
                                <label for="cage">Ano de publicação</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="cage" placeholder="Child Age" required>
                                <label for="cage">ISBM</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="cage" placeholder="Child Age">
                                <label for="cage">Quantidade de páginas</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
</div>
