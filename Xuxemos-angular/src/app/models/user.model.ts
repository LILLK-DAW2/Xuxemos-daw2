export interface User {
  id: number;
  token: number;
  nombre: string;
  apellidos: string;
  telefeno: string;
  correo: string;
  rol :string;
  estado: string;
  fechaC: Date;
  fechaB: Date | null;
}
