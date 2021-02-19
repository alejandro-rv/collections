<div id="modal-delete-{{ $collection->id }}" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">
        Are you sure to delete {{ $collection->name }}?
      </p>
      <button
        class="delete"
        onclick="closeDeleteModal({{ $collection->id }})"
      ></button>
    </header>
    <section class="modal-card-body has-background-light">
      Anything within it will be permanently lost.
    </section>
    <footer class="modal-card-foot">
      <form method="post" action="{{ url("/$collection->id") }}">
        @csrf
        @method('delete')
        <button
          type="button"
          class="button"
          onclick="closeDeleteModal({{ $collection->id }})"
        >
          Cancel
        </button>
        <button class="button is-danger">
          Delete
        </button>
      </form>
    </footer>
  </div>
</div>

<li class="box">
  <p class="subtitle">{{ $collection->name }}</p>
  <hr>
  <a class="mr-3" href="{{ url($collection->id) }}">
    Show
  </a>
  <a class="mr-3" href="{{ url($collection->id . '/edit') }}">
    Edit
  </a>
  <a
    class="mr-3 has-text-danger"
    onclick="openDeleteModal({{ $collection->id }})"
  >
    Delete
  </a>
</li>
