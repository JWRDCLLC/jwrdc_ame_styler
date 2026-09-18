# Branch policy

- Work on `development` (or a feature branch off it). Never commit or push directly to `master`.
- Changes reach `master` only via a pull request. This repo also enforces this on GitHub (branch protection on `master`), so a direct push attempt will be rejected — but don't attempt it in the first place.
- The plugin's self-updater (see `index.php`) reads `details.json` from this repo's latest published GitHub Release (`.github/workflows/release.yml` builds it). A PR merged into `master` must still bump the `Version:` header in `index.php`, but WordPress installs only see the update once a GitHub Release is published with a tag (`vX.Y.Z`) matching that header — the release workflow fails if the tag and header disagree.
