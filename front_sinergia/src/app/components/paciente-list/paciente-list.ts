import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Paciente } from '../../models/paciente';
import { PacienteService } from '../../services/paciente-service';

import {MatCardModule} from '@angular/material/card';
import {MatButtonModule} from '@angular/material/button';
import {MatIconModule} from '@angular/material/icon';
import {MatListModule} from '@angular/material/list';

@Component({
  selector: 'app-paciente-list',
  imports: [CommonModule, MatCardModule, MatButtonModule, MatIconModule, MatListModule],
  templateUrl: './paciente-list.html',
  styleUrl: './paciente-list.css',
})
export class PacienteList implements OnInit{
  pacientes: Paciente[] = [];
  errorMessage: string = '';
  
  constructor(private pacienteService: PacienteService){}
  
  ngOnInit(): void {
      this.cargarPacientes();
  }

  cargarPacientes(): void{
    this.pacienteService.getPacientes().subscribe({
      next: (data)=>{
        this.pacientes = data;
        console.log('pacientes cargados:',this.pacientes);
      },
      error:(err)=>{
        this.errorMessage = 'Error al cargar pacientes:'+err.message;
        console.log(err);
      }
    });

  }
}
