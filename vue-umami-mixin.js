export default {
    data() {
        return {
            umamiInstalled: document.getElementById("umami-script") !== null
        };
    },
    created() {
        if (
            !this.$developmentMode &&
            localStorage.getItem("umamiTracking") !== "false"
        ) {
            this.installUmami();

            if (localStorage.getItem("umamiTracking") === null) {
                localStorage.setItem("umamiTracking", "true");
            }
        }
    },
    methods: {
        installUmami: function() {
            if (
                !this.$developmentMode &&
                !document.getElementById("umami-script")
            ) {
                let umamiScript = document.createElement("script"),
                    scriptTag = document.getElementsByTagName("script")[0];

                umamiScript.async = true;
                umamiScript.defer = true;
                umamiScript.src = "https://domain.com/umami.js";
                umamiScript.id = "umami-script";
                umamiScript.setAttribute(
                    "data-website-id",
                    "umami-site-id"
                );

                scriptTag.parentNode.insertBefore(umamiScript, scriptTag);

                console.log("Activated Umami anonymous analytics");
            }
        },
        uninstallUmami: function() {
            if (!this.$developmentMode) {
                let umamiScript = document.getElementById("umami-script");

                umamiScript.remove();
                localStorage.setItem("umamiTracking", "false");

                console.log("Deactivated Umami anonymous analytics");
            }
        }
    }
};
