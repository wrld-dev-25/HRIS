$('.reset-form').on('click', function() {
    // Get the form that contains this button
    const form = $(this).closest('form');
    
    // Reset only the inputs in this specific form, not all forms on the page
    form.find('input:not([type="hidden"]):not([type="submit"]):not([type="button"])').val('');
    
    // Also reset textareas if needed
    form.find('textarea').val('');
    
    // Reset checkboxes and radio buttons
    form.find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
    
    // Don't reset select elements to preserve their options
});

$('.numbers-only').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
});

// Function to reinitialize flatpickr for dynamically added elements
function reinitializeFlatpickr() {
    const flatpickrExamples = document.querySelectorAll("[data-provider='flatpickr']");
    Array.from(flatpickrExamples).forEach(function (item) {
        if (!item._flatpickr) { // Check if flatpickr is already initialized
            const dateData = {};
            const isFlatpickerVal = item.attributes;

            if (isFlatpickerVal["data-date-format"])
                dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
            if (isFlatpickerVal["data-enable-time"]) {
                dateData.enableTime = true;
                dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString() + " H:i";
            }
            if (isFlatpickerVal["data-altFormat"]) {
                dateData.altInput = true;
                dateData.altFormat = isFlatpickerVal["data-altFormat"].value.toString();
            }
            if (isFlatpickerVal["data-minDate"]) {
                dateData.minDate = isFlatpickerVal["data-minDate"].value.toString();
            }
            if (isFlatpickerVal["data-maxDate"]) {
                dateData.maxDate = isFlatpickerVal["data-maxDate"].value.toString();
            }
            if (isFlatpickerVal["data-default-date"]) {
                dateData.defaultDate = isFlatpickerVal["data-default-date"].value.toString();
            }
            if (isFlatpickerVal["data-multiple-date"]) {
                dateData.mode = "multiple";
            }
            if (isFlatpickerVal["data-range-date"]) {
                dateData.mode = "range";
            }
            if (isFlatpickerVal["data-inline-date"]) {
                dateData.inline = true;
                dateData.defaultDate = isFlatpickerVal["data-default-date"].value.toString();
            }
            if (isFlatpickerVal["data-disable-date"]) {
                const dates = isFlatpickerVal["data-disable-date"].value.split(",");
                dateData.disable = dates;
            }
            if (isFlatpickerVal["data-week-number"]) {
                dateData.weekNumbers = true;
            }

            flatpickr(item, dateData); // Initialize flatpickr
        }
    });
}

// Function to reinitialize timepickr for dynamically added elements
function reinitializeTimepickr() {
    const timepickrExamples = document.querySelectorAll("[data-provider='timepickr']");
    Array.from(timepickrExamples).forEach(function (item) {
        if (!item._flatpickr) { // Check if timepickr is already initialized
            const timeData = {};
            const isTimepickerVal = item.attributes;

            if (isTimepickerVal["data-time-basic"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.dateFormat = "H:i";
            }
            if (isTimepickerVal["data-time-hrs"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.dateFormat = "H:i";
                timeData.time_24hr = true;
            }
            if (isTimepickerVal["data-min-time"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.dateFormat = "H:i";
                timeData.minTime = isTimepickerVal["data-min-time"].value.toString();
            }
            if (isTimepickerVal["data-max-time"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.dateFormat = "H:i";
                timeData.maxTime = isTimepickerVal["data-max-time"].value.toString();
            }
            if (isTimepickerVal["data-default-time"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.dateFormat = "H:i";
                timeData.defaultDate = isTimepickerVal["data-default-time"].value.toString();
            }
            if (isTimepickerVal["data-time-inline"]) {
                timeData.enableTime = true;
                timeData.noCalendar = true;
                timeData.defaultDate = isTimepickerVal["data-time-inline"].value.toString();
                timeData.inline = true;
            }

            flatpickr(item, timeData); // Initialize timepickr
        }
    });
}
