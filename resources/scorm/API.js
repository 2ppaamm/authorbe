// SCORM API Implementation
var SCORM_API = (function () {
    var initialized = false;

    return {
        initialize: function () {
            console.log("SCORM API Initialized");
            initialized = true;
            // Initialize SCORM session
            if (typeof LMSInitialize !== 'undefined') {
                LMSInitialize("");
            }
        },
        terminate: function () {
            if (initialized) {
                console.log("SCORM API Terminated");
                // Close SCORM session
                if (typeof LMSFinish !== 'undefined') {
                    LMSFinish("");
                }
                initialized = false;
            }
        },
        setValue: function (key, value) {
            if (initialized && typeof LMSSetValue !== 'undefined') {
                LMSSetValue(key, value);
            }
        },
        getValue: function (key) {
            if (initialized && typeof LMSGetValue !== 'undefined') {
                return LMSGetValue(key);
            }
            return null;
        },
    };
})();
