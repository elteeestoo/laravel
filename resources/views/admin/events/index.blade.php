{{-- @extends('admin.layout.crud')

@section('content')

  <section class="filter">
    <div class="filter-button">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>filter-menu</title><path d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" /></svg>
      </button>
    </div>
  </section>
  <div class="crud">
    <section class="table">
      <article class="table-record">
        <div class="table-buttons">
          <div class="edit-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
              </svg>
            </button>
          </div>
          <div class="delete-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
              </svg>
            </button>
          </div>
        </div>
        <div class="table-data">
          <ul>
            <li><span>Titulo</span>Testo&Nidsson llega a BCM!!!</li>
          </ul>
        </div>
      </article>
      <article class="table-record">
        <div class="table-buttons">
          <div class="edit-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
              </svg>
            </button>
          </div>
          <div class="delete-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
              </svg>
            </button>
          </div>
        </div>
        <div class="table-data">
          <ul>
            <li><span>Fecha</span>23/12/2023</li>
          </ul>
        </div>
      </article>
      <article class="table-record">
        <div class="table-buttons">
          <div class="edit-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
              </svg>
            </button>
          </div>
          <div class="delete-button">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
              </svg>
            </button>
          </div>
        </div>
        <div class="table-data">
          <ul>
            <li><span>Hora</span>23:00 - 2:00</li>
          </ul>
        </div>
      </article>
    </section>
    <section class="form">
      <div class="form-buttons">
        <div class="form-clean-button">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>broom</title><path d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" /></svg>
          </button>
        </div>
        <div class="form-save-button">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>content-save</title><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg>
          </button>
        </div>
      </div>
      <form>
        <div class="form-element">
          <div class="form-element-group">
            <div class="title">
              <label for="title">
                Titulo
              </label>
            </div>
            <div class="form-element-input">
              <input type="text">
            </div>
          </div>
          <div class="form-element-group">
            <div class="form-element">
              <div class="date">
                <label for="date">
                  Fecha
                </label>
              </div>
              <div class="form-element-input">
                <input type="date">
              </div>
            </div>
          </div>
          <div class="form-element-group">
            <div class="form-element">
              <div class="price">
                <label for="price">
                  Precio
                </label>
              </div>
              <div class="form-element-input">
                <input type="number">
              </div>
            </div>
          </div>
          <div class="form-element-group">
            <div class="form-element">
              <div class="hour">
                <label for="hour">
                  Hora
                </label>
              </div>
              <div class="form-element-input">
                <input type="time">
              </div>
            </div>
          </div>
          <div class="form-element-group">
            <div class="form-element">
              <div class="direction">
                <label for="direction">
                  Lugar del evento
                </label>
              </div>
              <div class="form-element-input">
                <input type="text">
              </div>
            </div>
          </div>
          <textarea name="description"></textarea>
        </div>
        
        
       
        
      </form>
    </section>
  </div>

@endsection --}}

@extends('admin.layout.crud')

@section('table')
  @component('admin.components.table-filter')@endcomponent
  @component('admin.components.filter-modal')
    <div class="content-title">
      <h3>filtrar tabla</h3>
    </div>
    <div class="content-text">
      <label for="name">Nombre</label>
      <input type="text">
    </div>
    <div class="content-text">
      <label for="name">e-mail</label>
      <input type="text">
    </div>
    <div class="content-buttons">
      <button class="content-buttons-accept">
        <h3>Aceptar</h3>
      </button>
      <button class="content-buttons-deny">
        <h3>Cancelar</h3>
      </button>
    </div>
  @endcomponent

  <div class="table-records">
    @isset($events)
      @foreach($events as $event_element)
        <article class="table-record">
          <div class="table-buttons">
            <div class="edit-button" data-endpoint="{{route('events_edit', ["event" => $event_element->id])}}">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                </svg>
              </button>
            </div>
            <div class="destroy-button" data-endpoint="{{route('events_destroy', ["event" => $event_element->id])}}">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                </svg>
              </button>

            </div>
          </div>
          <div class="table-data">
            <ul>
              <li><span>Nombre</span>{{$event_element->name}}</li>
              <li><span>Fecha Inicio</span>{{$event_element->startDate}}</li>
              <li><span>Fecha Fin</span>{{$event_element->endDate}}</li>
              <li><span>Precio</span>{{$event_element->price}}</li>
              <li><span>Hora Inicio</span>{{$event_element->startTime}}</li>
              <li><span>Hora Fin</span>{{$event_element->endTime}}</li>
              <li><span>Direccion</span>{{$event_element->address}}</li>
            </ul>
          </div>
        </article>
      @endforeach
    @endisset
  </div>
  
  <div class="table-pagination">
    <span>{{trans_choice('admin/pagination.total',  1, ['count' => 1])}}</span>
  </div>
@endsection

@section('form')

<div class="form-top-bar">
  <div class="tabs">
    <div class="tab active" data-tab="general">
      <button>
        General
      </button>
    </div>
    <div class="tab" data-tab="images">
      <button>
        Imágenes
      </button>
    </div>
  </div>
  <div class="form-buttons">
    <div class="create-button"  data-endpoint="{{route('events_create')}}">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>broom</title><path d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" /></svg>
      </button>
    </div>
    <div class="store-button" data-endpoint="{{route('events_store')}}">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>content-save</title><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg>
      </button>
    </div>
  </div>
</div>
<form class="admin-form">
  <input type="hidden" name="id" value="{{$event->id ?? ''}}">
  <div class="form-element">
    <div class="form-element-group">
      <div class="title">
        <label for="title">
          Titulo
        </label>
      </div>
      <div class="form-element-input">
        <input type="text" name="name" value="{{$event->name ?? ''}}">
      </div>
    </div>
    <div class="form-element-group">
      <div class="form-element">
        <div class="date">
          <label for="date">
            Fecha Inicio
          </label>
        </div>
        <div class="form-element-input">
          <input type="date" name="startDate" value="{{$event->startDate ?? ''}}">
        </div>
      </div>
      <div class="form-element">
        <div class="date">
          <label for="date">
            Fecha Fin
          </label>
        </div>
        <div class="form-element-input">
          <input type="date" name="endDate" value="{{$event->endDate ?? ''}}">
        </div>
      </div>
    </div>
    <div class="form-element-group">
      <div class="form-element">
        <div class="price">
          <label for="price">
            Precio
          </label>
        </div>
        <div class="form-element-input">
          <input type="number" name="price" value="{{$event->price ?? ''}}">
        </div>
      </div>
    </div>
    <div class="form-element-group">
      <div class="form-element">
        <div class="hour">
          <label for="startTime">
            Hora Inicio
          </label>
        </div>
        <div class="form-element-input">
          <input type="time" name="startTime" value="{{$event->startTime ?? ''}}">
        </div>
      </div>
    </div><div class="form-element-group">
      <div class="form-element">
        <div class="hour">
          <label for="endTime">
            Hora Fin
          </label>
        </div>
        <div class="form-element-input">
          <input type="time" name="endTime" value="{{$event->endTime ?? ''}}">
        </div>
      </div>
    </div>
    <div class="form-element-group">
      <div class="form-element">
        <div class="direction">
          <label for="address">
            Lugar del evento
          </label>
        </div>
        <div class="form-element-input">
          <input type="text" name="address" value="{{$event->address ?? ''}}">
        </div>
      </div>
    </div>
  </div>
  
  
 
  
</form>

@endsection

