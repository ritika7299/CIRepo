
    // hide table row
    $("#selectEL").on("change", function () {
      if ($(this).val() == "Cl Leave") $(".trELeave").removeClass("d-none");
      else $(".trELeave").addClass("d-none");
    });

    // Add radio button functionality for outstation leave
    $("#optOutstationNo").on("click", function () {
      $("#txtOutstationAddress").val("");
      $(".trOutstationDetail").addClass("d-none");
      $("input[name='outstationdetail']").prop("checked", false);
    });

    $("#optOutstationYes").on("click", function () {
      $("#txtOutstationAddress").val("");
      $(".trOutstationDetail").removeClass("d-none");
      $("#txtOutstationAddress").prop("required", true);
      $("#optGoingOther").prop("checked", true);
    });

    function isOutstationAddressRequired() {
      return $("#optOutstationYes").prop("checked");
    }

    $('input[name="outstationdetail"]').on("click", function () {
      var selectedOption = this.parentElement.innerText.trim();
      $("#lblAddress").text(
        "Address during outstation (" + selectedOption + ")"
      );
    });

    // Add new row in date table

    $("#itemtable").on("click", ".remCF", function () {
      $(this).parent().parent().remove();
      //recalculate the days
      calculateDays();
    });

    //--------------------------------------------------------- Calculate Total No. of Days-------------------------//
    changeDate();
    function changeDate() {
      var year = new Date().getFullYear();
      var dateFormat = "dd-mm-yy",
        from = $(".from")
          .datepicker({
            minDate: new Date(year, 0, 1),
            maxDate: new Date(year, 11, 31),
            dateFormat: "dd-mm-yy",
            yearRange: "1950:+0",
          })
          .on("change", function () {});
      to = $(".to")
        .datepicker({
          minDate: new Date(year, 0, 1),
          maxDate: new Date(year, 11, 31),
          dateFormat: "dd-mm-yy",
          yearRange: "1950:+0",
        })
        .on("change", function () {
          calculateDays();
        });

      leavedate = $("#leavedate").datepicker({
        minDate: new Date(year, 0, 1),
        maxDate: new Date(year, 11, 31),
        dateFormat: "dd-mm-yy",
        yearRange: "1950:+0",
      });

      function getDate(element) {
        var date;
        try {
          date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
          date = null;
        }
        return date;
      }
    }

    function calculateDays() {
      var date1 = $("#fromdate").val();
      var date2 = $("#todate").val();
      date1 = new Date(date1);
      date2 = new Date(date2);
      var milli_secs = date1.getTime() - date2.getTime();

      // Convert the milli seconds to Days
      var days = milli_secs / (1000 * 3600 * 24);
      /*document.getElementById("TotalLeaves").innerHTML =
            Math.round(Math.abs(days));*/
      $("#TotalLeaves").text("" + Math.round(Math.abs(days)));
    }

    /* Submit from through button*/

    // $(document).ready(function () {
    //   $("#submit-btn").click(function () {
    //     alert("Submit leave sucessfully.");
    //   });
    // });

    /* ------------------------------------------------Submit button function for ---------------------------------------*/

    // const form = document.querySelector("#el-form");
    // const select = document.querySelector("#selectEL");
    // const fromdate = document.querySelector("#fromdate");
    // const todate = document.querySelector("#todate");
    // const sundayHoliday = document.querySelector("#Sunday-holiday");
    // const reason = document.querySelector("#txtLeaveReason");
    // const forwarder = document.querySelector("#forwarder_id");

    // form.addEventListener("submit", (e) => {
    //   if (!validateInputs()) {
    //     e.preventDefault();
    //   }
    // });

    /*----------Select ltc---------------*/
    /*document.addEventListener("DOMContentLoaded", function () {
      const ltcRadio = document.getElementById("optGoingLTC");
      const hometownRadio = document.getElementById("optGoingHometown");
      const otherRadio = document.getElementById("optGoingOther");
      const ltcRow = document.querySelector(".trLTCDetail");

      ltcRadio.addEventListener("click", function () {
        if (this.checked) {
          ltcRow.classList.remove("d-none"); // Show the row
        } else {
          ltcRow.classList.add("d-none"); // Hide the row
        }
      });
    });*/

    //-------------------------Add table row in suffix and prefix-------------//
    /* $("#buttonadd").click(function () {
      $("#tbodysuffix").append(
        '<tr valign="top"><td><input type="date" class="form-control from hasDatepicker" id="fromdate" placeholder="Enter Date"/></td><td><select class="form-control select select2-hidden-accessible" name="leavetype" data-select2-id="leave-year-day" tabindex="-1" aria-hidden="true"><option value="" data-select2-id="selectopt">Select</option><option value="" data-select2-id="prefix">Prefix</option><option value="" data-select2-id="suffix">Suffix</option></select>&nbsp;</td></td><td><a href="javascript:void(0);" class="remCF btn btn-sm btn-danger"><i class="icon-trash"></i></a></td></tr>'
      );
      $(".select2-hidden-accessible").select2({
        minimumResultsForSearch: Infinity,
      });
    });

    $("#tbodysuffix").on("click", ".remCF", function () {
      $(this).parent().parent().remove();
    });*/

    /*--------------Table row of ltc and hometown-------------------*/
    document.addEventListener("DOMContentLoaded", function () {
      const ltcRadio = document.getElementById("optGoingLTC");
      const hometownRadio = document.getElementById("optGoingHometown");
      const otherRadio = document.getElementById("optGoingOther");
      const ltcRow = document.querySelector(".trLTCDetail");

      ltcRadio.addEventListener("click", function () {
        if (this.checked) {
          ltcRow.classList.remove("d-none"); // Show the row
        } else {
          ltcRow.classList.add("d-none"); // Hide the row
        }
      });

      hometownRadio.addEventListener("click", function () {
        if (this.checked) {
          ltcRow.classList.remove("d-none"); // Show the row
        } else {
          ltcRow.classList.add("d-none"); // Hide the row
        }
      });

      otherRadio.addEventListener("click", function () {
        ltcRow.classList.add("d-none"); // Hide the row
      });
    });
  