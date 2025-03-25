<div id="liveAlertPlaceholder"></div>
  <button type="button" class="btn btn-primary" id="liveAlertBtn" style="margin-left: 20px; margin-bottom: 20px; ">Show live alert</button>

  <script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
    const appendAlert = (message, type) => {
      const wrapper = document.createElement('div');
      wrapper.innerHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
          <div>${message}</div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      `;
      alertPlaceholder.append(wrapper);
    };

    const alertTrigger = document.getElementById('liveAlertBtn');
    if (alertTrigger) {
      alertTrigger.addEventListener('click', () => {
        appendAlert('Nice, you triggered this alert message!', 'success');
      });
    }
  </script><?php /**PATH D:\KULIAH\SEMESTER 4\PEMROGRAMAN WEB 2\tugas1-pemweb\resources\views/components/alert.blade.php ENDPATH**/ ?>