@extends('layouts.app')
@section('content')

 <div class="container mt-5">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cadastro de Aluno</h5>
            <i class="bi bi-person-lines-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaCadastroAluno.html" class="btn btn-primary">Cadastro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cadastro de Turma</h5>
            <i class="bi bi-people-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaCadastroTurma.html" class="btn btn-primary">Cadastro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cadastro de Professor</h5>
            <i class="bi bi-person-video3" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaCadastroProfessor.html" class="btn btn-primary">Cadastro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cadastro de Horário</h5>
            <i class="bi bi-clock-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaCadastroHorario.html" class="btn btn-primary">Cadastro</a>
          </div>
        </div>
      </div>

      <!-- Novos cards adicionados -->
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Visualizar Alunos</h5>
            <i class="bi bi-eye-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaVisualizarAlunos.html" class="btn btn-primary">Visualizar</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Visualizar Turmas</h5>
            <i class="bi bi-eye-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaVisualizarTurmas.html" class="btn btn-primary">Visualizar</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Visualizar Professores</h5>
            <i class="bi bi-eye-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaVisualizarProfessores.html" class="btn btn-primary">Visualizar</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Visualizar Horários</h5>
            <i class="bi bi-eye-fill" style="font-size: 36px;"></i>
            <br><br>
            <a href="/html/TelaVisualizarHorarios.html" class="btn btn-primary">Visualizar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
