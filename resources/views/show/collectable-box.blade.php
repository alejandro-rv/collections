<div id="{{ $modal_id }}" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">
        Are you sure to delete {{ $collectable->name }}?
      </p>
      <button class="delete" onclick="closeModal('{{ $modal_id }}')"></button>
    </header>
    <section class="modal-card-body has-background-light">
      This collectable will be permanently lost.
    </section>
    <footer class="modal-card-foot">
      <form
        method="post"
        action="{{ url("/$collectable->collection_id/$collectable->id") }}"
      >
        @csrf
        @method('delete')
        <button
          type="button"
          class="button"
          onclick="closeModal('{{ $modal_id }}')"
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
  <p class="subtitle">{{ $collectable->name }}</p>
  <hr>
  <a
    class="mr-3"
    href="{{ url("/$collectable->collection_id/$collectable->id/edit") }}"
  >
    Edit
  </a>
  <a class="mr-3 has-text-danger" onclick="openModal('{{ $modal_id }}')">
    Delete
  </a>
</li>
