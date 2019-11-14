<script src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>



<div class="main-container container-fluid">
  <!-- heading -->
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="text-primary mr-auto">Example list</h1>
      </div>
    </div>
  </div>
  <!-- /heading -->
  <!-- table -->
  <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th> Name</th>
        <th> Description</th>
        <th> Price</th>
        <th> Action</th>
      </tr>
    </thead>
    <tbody>

        @php $i=1; @endphp
        @foreach($program as $p)

      <tr class="data-row">
        <td class="align-middle iteration">{{ $i++ }}</td>
        <td class="align-middle name">{{ $p->judul }}</td>
        <td class="align-middle word-break description">{{ $p->deskripsi }}</td>
        <td class="align-middle word-break price">{{ $p->harga }}</td>
        <input type="hidden" value="{{$p->dp}}" class="dp">
        
        <td class="align-middle">
          <button type="button" class="btn btn-success" id="edit-item" data-item-id="1">edit</button>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  <!-- /table -->
</div>
<!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Detail Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
          <div class="card">
            <div class="card-body">
                <table id="program" class="table mb-3 table-striped table-program dataTable no-footer" style="width:100%" role="grid" aria-describedby="program_info">
                    <tbody>
                    <tr role="row" class="odd">
                        <td>Judul</td>
                        <td class="" id="modal-input-name"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td>Deskripsi</td>					
                        <td class="" id="modal-input-description"></td>
                    </tr>
                    <tr role="row" class="odd">
                        <td>Harga</td>			
                        <td class="" id="modal-input-price"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td>DP</td>			
                        <td class=""  id="modal-input-dp"> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /Attachment Modal -->
<script type="text/javascript">
$(document).ready(function() {
    /**
     * for showing edit item popup
     */
  
    $(document).on('click', "#edit-item", function() {
      $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
  
      var options = {
        'backdrop': 'static'
      };
      $('#edit-modal').modal(options)
    })
  
    // on modal show
    $('#edit-modal').on('show.bs.modal', function() {
      var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
      var row = el.closest(".data-row");
  
      // get the data
      var id = el.data('item-id');
      var name = row.children(".name").text();
      var description = row.children(".description").text();
      var price = row.children(".price").text();
      var dp = row.children(".dp").val();
  
      // fill the data in the input fields
      $("#modal-input-id").text(id);
      $("#modal-input-name").text(name);
      $("#modal-input-description").text(description);
      $("#modal-input-price").text(price);
      $("#modal-input-dp").text(dp);
  
    })
  
    // on modal hide
    $('#edit-modal').on('hide.bs.modal', function() {
      $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
      $("#edit-form").trigger("reset");
    })
  })
</script>
