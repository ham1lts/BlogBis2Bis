<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <?php Session::alert('usuario') ?>
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preecha o formulário abaixo para fazer seu cadastro</small></p>

            <form name="cadastrar" method="POST" action="<?= URL ?>/admin/register" class="mt-4">
            <div class="form-group">
                    <label for="usuario">Usuario: <sup class="text-danger">*</sup></label>
                    <input type="text" name="usuario" id="usuario" value="<?= $data['usuario'] ?>" class="form-control <?= $data['usuario_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['usuario_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?= $data['nome'] ?>" class="form-control <?= $data['nome_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['nome_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" value="<?= $data['email'] ?>" class="form-control <?= $data['email_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" id="senha" value="<?= $data['senha'] ?>" class="form-control  <?= $data['senha_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['senha_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirma_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirma_senha" id="confirma_senha" value="<?= $data['confirma_senha'] ?>" class="form-control <?= $data['confirma_senha_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $data['confirma_senha_erro'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="<?= URL ?>/user/login">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>