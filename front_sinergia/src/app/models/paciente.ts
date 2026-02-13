export class Paciente {
    id?: number; // Opcional, ya que al crear uno nuevo no tiene ID aún
    tipo_documento_id!: number;
    numero_documento!: string;
    nombre1!: string;
    apellido1!: string;
    genero_id!: number;
    departamento_id!: number;
    municipio_id!: number;
    correo!: string;
    
    // Campos opcionales para cuando Laravel trae las relaciones (Eager Loading)
    tipo_documento?: any;
    genero?: any;
    municipio?: any;
}
