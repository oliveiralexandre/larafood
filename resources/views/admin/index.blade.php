@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Planos</h3>

                <p>Configurações de Planos</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-alt"></i>
              </div>
              <a href="admin/plans" class="small-box-footer">ACESSAR <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Perfis</h3>

                <p>Configurações de Perfis</p>
              </div>
              <div class="icon">
                <i class="fas fa-address-book"></i>
              </div>
              <a href="admin/profiles" class="small-box-footer">ACESSAR <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
         
@stop
